<?php

class MultiselectField extends CheckboxesField {

  public $search = true;

  static public $assets = array(
    'css' => array(
      'multiselect.css'
     ),
    'js' => array(
      'multiselect.js'
    )
  );

  public function __construct() {
    $this->icon    = 'chevron-down';
  }

  public function input() {
    $value = func_get_arg(0);
    $input = parent::input($value);
    return str_replace('required','', $input);
  }

  public function item($value, $text) {

    $label = new Brick('label');
    $label->addClass('input');
    $label->attr('data-focus', 'true');

    $text = new Brick('span', $this->i18n($text));
    $label->prepend($text);

    $input = $this->input($value);
    $label->prepend($input);


    if($this->readonly) {
      $label->addClass('input-is-readonly');
    }

    return $label;

  }

  public function content() {

    $multiselect = new Brick('div');
    $multiselect->addClass('input input-display');

    if($this->readonly()) {
      $multiselect->addClass('input-is-readonly');
    }

    $multiselect->attr(array(
      'tabindex' => 0
    ));

    $multiselect->data(array(
      'field'    => 'multiselect',
      'search'   => $this->search ? 1 : 0,
      'readonly' => ($this->readonly or $this->disabled) ? 1 : 0
    ));

    $multiselect->append('<div class="placeholder">&nbsp;</div>');

    $content = new Brick('div');
    $content->addClass('field-content input-with-multiselectbox');
    $content->append($multiselect);
    $content->append($this->optionlist());
    $content->append($this->icon());

    return $content;

  }

  public function optionlist() {
    $list  = '<div class="input-list">';

    if ($this->search) {
      $list .= '<input class="multiselectbox-search" placeholder="Type to filter options">';
    }

    $list .= '<ul>';
    foreach($this->options() as $key => $value) {
      $list .= '<li class="input-list-item">' . $this->item($key, $value) . '</li>';
    }
    $list .= '</ul></div>';

    return $list;
  }


  public function label() {
    $label = parent::label();
    $label->attr('for', '');
    return $label;
  }

}
