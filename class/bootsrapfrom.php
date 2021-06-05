 <?php

  class Bootsrapfrom extends \tutoriel\HTML\Form
  {
    protected function surround($html)
    {
      return "<div class='form-group'>{$html}</div>";
    }

    public function input($name)
    {
      return $this->surround(
        '<label>' . $name . '</label>
        <input type="text" name="' . $name . '" value="' . $this->get_value($name) . '" 
      class="form-control"
      />'
      );
    }


    public function submit()
    {
      return $this->surround("<button class=\"btn btn-primary\" style='background-color:{$this->col()}' type='submit'>Send</button>");
    }
  }