<?php 

class NotToBringItem extends DataObject {

  private static $has_one = array (
    'MoveInPage' => 'MoveInPage'
  );

  private static $many_many = array (
    'Icons' => 'Icon'
  );


  public function getCMSFields() {
    $fields = FieldList::create(
      CheckboxSetField::create(
        'Icons', 
        'Selected icons', 
        $this->MoveInPage()->Icons()->map('ID', 'Title')
      )
    );



    // $uploader->setFolderName('homepage-photos');
    // $uploader->getValidator()->setAllowedExtensions(array(
    //   'png', 'gif', 'jpeg', 'jpg'
    // ));

    return $fields;
  }
}