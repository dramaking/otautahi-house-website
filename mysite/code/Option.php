<?php 

class Option extends DataObject {

  private static $db = array (
    'OptionTab' => 'Varchar',
    'OptionBrief' => 'Varchar',
    'OptionPrice' => 'Int'
  );

  private static $has_one = array (
    'BookingPage' => 'BookingPage'
  );

  private static $many_many = array (
    'Icons' => 'Icon',
    'Photos' => 'Image'
  );

  private static $summary_fields = array (
    'OptionTab' => 'Option Tab',
    'OptionBrief' => 'Option Brief',
  );

  // public function getGridThumbnail() {
  //   if($this->Photo()->exists()) {
  //     return $this->Photo()->setWidth(100);
  //   }

  //   return '(no image)';
  // }

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('OptionTab'),
      TextField::create('OptionBrief'),
      TextField::create('OptionPrice'), 
      CheckboxSetField::create(
        'Icons', 
        'Selected icons', 
        $this->BookingPage()->Icons()->map('ID', 'Title')
      ),
      UploadField::create('Photos')
    );



    // $uploader->setFolderName('homepage-photos');
    // $uploader->getValidator()->setAllowedExtensions(array(
    //   'png', 'gif', 'jpeg', 'jpg'
    // ));

    return $fields;
  }
}