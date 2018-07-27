<?php
if( !isset($gCms) ) exit;
if( !$this->VisibleToAdminUser() ) exit;
$this->SetCurrentTab('status');

// get the total of unpaid purchases
$stats = new \stdClass;
$stats->total_unpaid = $this->transactionStorage->calc_total_unpaid(); // dollars
// get the oldest unpaid purchase
$stats->oldest_unpaid = $this->transactionStorage->calc_oldest_unpaid(); // timestamp
// get the count of vendors with unpaid purchases
$stats->count_unpaid_vendors = $this->transactionStorage->count_unpaid_vendors(); // integer

$tpl = $this->CreateSmartyTemplate('admin_statustab.tpl');
$tpl->assign('stats',$stats);
$tpl->display();
