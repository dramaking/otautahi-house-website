<?php 

class Section extends DataObject {

  private static $db = array (
    'Title' => 'Varchar',
    'Content' => 'Text'
  );

  private static $has_one = array (
    'MoveInPage' => 'MoveInPage'
  );

  private static $summary_fields = array (
    'Title' => 'Section title',
    'Content' => 'Section Content'
  );

  public function getCMSFields() {
    $fields = FieldList::create(
      TextField::create('Title'),
      TextareaField::create('Content')
    );



    // $uploader->setFolderName('homepage-photos');
    // $uploader->getValidator()->setAllowedExtensions(array(
    //   'png', 'gif', 'jpeg', 'jpg'
    // ));

    return $fields;
  }
}