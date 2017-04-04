<?php 

class GuideItem extends DataObject {

  private static $db = array (
    'Title' => 'Varchar',
    'Content' => 'HTMLText'
  );

  private static $has_one = array (
    'GuidePage' => 'GuidePage'
  );

  private static $summary_fields = array (
    'Title' => 'Title'
  );

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('Title'),
      HTMLEditorField::create('Content')
      
    );

    return $fields;
  }
}