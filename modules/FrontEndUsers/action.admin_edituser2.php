<?php
namespace FrontEndUsers;

if( !isset($gCms) ) exit;
if( !$this->_HasSufficientPermissions( 'users' ) ) return;

$user_id = $user = null;
try {
    $this->SetCurrentTab('users');
    if( isset($params['cancel']) ) {
        // clear anything in the session, but don't need the data.
        \FrontEndUsers\user_edit_assistant::retrieve();
        $this->SetMessage($this->Lang('msg_cancelled'));
        $this->RedirectToTab();
    }

    $user = \FrontEndUsers\user_edit_assistant::retrieve();
    if( !$user ) throw new \LogicException('Could not restore user edit info from session');
    $user_id = $user->id;
    if( isset($params['back']) ) {
        $user->store();
        $this->Redirect($id,'admin_edituser',$returnid, [ 'user_id' => $user_id ] );
    }

    $alldefns = $this->GetPropertyDefns();
    $fields = [];
    $properties = \feu_utils::get_properties_for_groups($user->get_groups());
    if( !count($properties) ) {
        // there are no properties to think of.
        // simulate submission.
        $params['submit'] = 1;
        //throw new \RuntimeException($this->Lang('error_properties'));
    } else {
        foreach( $properties as $prop ) {
            $prop_name = $prop['name'];
            if( !isset($alldefns[$prop_name]) ) throw new \LogicException('Definition for property '.$prop_name.' not found');
            if( $alldefns[$prop_name]['encrypt'] && $user_id > 0 ) continue;  // cannot edit encrypted properties.
            $fields[$prop_name] = new property_editor_defn($alldefns[$prop_name],$prop,$user);
        }
    }

    if( isset($params['submit']) ) {
        /* handle submission */
        try {
            // note, we use the set value method on the field... it will actually modify the user
            // and set the data.
            foreach( $fields as $prop_name => $field ) {
                $key = 'prop_'.$prop_name;
                $key2 = 'propdel_'.$prop_name;
                $val = \cge_utils::get_param($params,$key);
                if( $field->type == 8 ) $val = \cge_param::get_separated_date($params,$key);
                if( $field->type == 6 ) {
                    if( isset($params[$key2]) ) $field->clear_value();
                    $val = $id.$key;
                }
                $field->set_value($val);
            }

            // pass 2 .. validate the input (required fields, upload types and so-on)
            foreach( $fields as $prop_name => $field ) {
                $field->validate();
            }

            // pass 2.1 ... ensure that if must_validate is on, that we have an email address
            // for this user.
            if( $user->must_validate && !$user->can_validate() ) {
                throw new \RuntimeException($this->Lang('error_validate_insufficientinfo'));
            }

            $is_add = ($user->id < 1) ? TRUE : FALSE;
            $user->save();

            // pass 3 .. do post proocessing.
            foreach( $fields as $prop_name => $field ) {
                $field->postprocess($user);
            }

            // all done... just gotta do some notifications and events.
            $evt_parms = [ 'name' => $user->username, 'id' => $user->id ];
            if( $is_add ) {
                audit('',$this->GetName(),'Added user '.$user->username);
                $this->add_history($user->id,'admin add user');
                $this->SendEvent('OnCreateUser', $evt_parms );
                $this->_SendNotificationEmail('OnCreateUser', $evt_parms );
                $this->SetMessage($this->Lang('msg_useradded'));
            } else {
                $this->add_history($user_id,'admin change settings');
                audit($user->id,$this->GetName(),'Modified user '.$user->username);

                $this->SendEvent('OnUpdateUser', $evt_parms );
                $this->_SendNotificationEmail('OnUpdateUser', $evt_parms );
                $this->SetMessage($this->Lang('msg_usermodified'));

                if( $user->must_validate ) {
                    $tmpcode = $this->GetUserTempCode( $user->id );
                    if( !$tmpcode ) {
                        $generator = new \FrontEndUsers\email_verify_assistant($user->id);
                        $generator->send();
                    }
                }
            }
            $this->RedirectToTab();
        }
        catch( \Exception $e ) {
            echo $this->ShowErrors($e->GetMessage());
        }
    }

    $tpl = $this->CreateSmartyTemplate('admin_edituser2.tpl');
    $tpl->assign('required_field_color',$this->GetPreference('required_field_color','blue'));
    $tpl->assign('hidden_field_color',$this->GetPreference('hidden_field_color','blue'));
    $tpl->assign('required_field_marker',$this->GetPreference('requried_field_marker','*'));
    $tpl->assign('hidden_field_marker',$this->GetPreference('hidden_field_marker','!!'));
    $tpl->assign('fields',$fields);
    $tpl->assign('user',$user);
    $tpl->display();
    $user->store();
}
catch( \Exception $e ) {
    if( $user ) $user->store();
    $this->SetError($e->GetMessage());
    $this->Redirect($id,'admin_edituser',$returnid, [ 'user_id' => $user_id ] );
}
