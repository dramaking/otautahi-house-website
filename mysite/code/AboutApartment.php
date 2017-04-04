<?php 

class AboutApartment extends DataObject {

  private static $db = array (
    'AboutDescription' => 'Text',
    'InternetDescription' => 'Text',
    'PaymentDescription' => 'Text'
  );

  private static $has_one = array (
    'BookingPage' => 'BookingPage'
  );

  private static $many_many = array (
    'Icons' => 'Icon',
    'Prices' => 'Price'
  );

  private static $summary_fields = array (
    'AboutDescription' => 'About Description',
    'InternetDescription' => 'Internet Description'
  );


  // public function getGridThumbnail() {
  //   if($this->Photo()->exists()) {
  //     return $this->Photo()->setWidth(100);
  //   }

  //   return '(no image)';
  // }

  public function getCMSFields() {
    $fields = FieldList::create(
      TextareaField::create('AboutDescription'),
      TextareaField::create('InternetDescription'),
      TextareaField::create('PaymentDescription'), 
      CheckboxSetField::create(
        'Icons', 
        'Selected icons', 
        $this->BookingPage()->Icons()->map('ID', 'Title')
      ),
      GridField::create(
        'Prices', 
        'Prices List',
        $this->Prices(), 
        GridFieldConfig_RecordEditor::create()
      )
    );



    // $uploader->setFolderName('homepage-photos');
    // $uploader->getValidator()->setAllowedExtensions(array(
    //   'png', 'gif', 'jpeg', 'jpg'
    // ));

    return $fields;
  }
}