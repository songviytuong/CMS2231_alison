<fieldset>
  <legend>{$mod->Lang('hdr_overall_status')}</legend>
  <table class="pagetable" style="border: none;">
    <tr>
       <td><strong>{$mod->Lang('lbl_total_outstanding_payouts')}:</strong></td>
       <td>{$stats->total_unpaid|number_format:2}</td>
    </tr>
    <tr>
       <td><strong>{$mod->Lang('lbl_oldest_unpaid_sale')}:</strong></td>
       <td>{$stats->oldest_unpaid|date_format:'%x'}</td>
    </tr>
    <tr>
       <td><strong>{$mod->Lang('lbl_num_unpaid_vendors')}:</strong></td>
       <td>{$stats->count_unpaid_vendors}</td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>{$mod->Lang('views')}</legend>
  <div class="pageoverflow">
    <a href="{cms_action_url action='admin_view_pending_payouts'}">{$mod->Lang('link_pending_payouts')}</a>
  </div>
</fieldset>