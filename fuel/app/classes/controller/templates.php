<?php
/**
 * An example Controller.  This shows the most basic usage of a Controller.
 */
class Controller_templates extends Controller{

  public function before() {
    if ( !Auth::has_access('write.create') ) {
      Response::redirect("welcome/index");
    }
  }

    public function action_index() {

      return View::forge('templates/index');
    }

    public function action_productivity()  {
       return View::forge('templates/productivity');
    }

      public function action_inspiration()  {
        return View::forge('templates/inspiration');
    }

      public function action_free()  {

        if (Input::method() == 'POST') {
          $date = new DateTime();
          $date->setTimezone(new DateTimeZone('Europe/Riga'));
          $realDate = $date->format('Y-m-d H:i:sP');
          list(,$user_id) = Auth::get_user_id();
          $user = Model_Orm_User::find($user_id);
          $val = Model_Orm_Datas::validate('create');
          $datas = Model_Orm_Datas::forge(
             array(
              'email' => $user->username,
              'title' => Input::post("title"),
              'text' => Input::post("text"),
              'template' => "1",
              'date' => $realDate,
              'public' =>'1'
              ));

    if($datas->save()) {
      Response::redirect('templates/index');
    }
  }
        return View::forge('templates/free');
    }

}