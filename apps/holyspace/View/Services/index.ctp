<?php

function viewServiceButton($AppModel, $data)
{
  return $AppModel->Html->Link($data['date'], "/services/view/{$data['id']}");
}

$table_content_headers = array("Date");

$table_content_rows = array_map(function($row){

  $row = $row['Service'];
  // FORMAT DATE
  $date = strtotime($row['date']);
  $row['date'] = date('d/m/Y', $date);

  return array(
    viewServiceButton($this, $row)
  );
}, $services);

$table_header = $this->Html->tableHeaders($table_content_headers);
$table_body = $this->Html->tableCells($table_content_rows);

// TITLE
echo $this->Html->tag('h1', 'Services');
// TABLE
echo $this->Html->tag('table', $table_header . $table_body);