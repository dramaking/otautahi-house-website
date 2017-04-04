<?php 

class Step extends DataObject {

  private static $db = array (
    'StepTitle' => 'Varchar',
    'StepDescription' => 'Text'
  );

  private static $has_one = array (
    'BookingPage' => 'BookingPage'
  );

  private static $many_many = array (
    'StepBoxs' => 'StepBox'
  );

  private static $summary_fields = array (
    'StepTitle' => 'Step Title',
    'StepDescription' => 'Step Description',
  );

  // public function getGridThumbnail() {
  //   if($this->Photo()->exists()) {
  //     return $this->Photo()->setWidth(100);
  //   }

  //   return '(no image)';
  // }

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('StepTitle'),
      TextareaField::create('StepDescription'),
      GridField::create(
        'StepBoxs', 
        'StepBoxs List',
        $this->StepBoxs(), 
        GridFieldConfig_RecordEditor::create()
      )
    );

    return $fields;
  }
}