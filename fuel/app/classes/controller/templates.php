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

      if (Input::method() == 'POST') {
                  $date = new DateTime();
                $ololo =   request::param("randomQuestions");
                echo $ololo[0];
            //       $date->setTimezone(new DateTimeZone('Europe/Riga'));
            //       $realDate = $date->format('Y-m-d H:i:sP');
            //       list(,$user_id) = Auth::get_user_id();
            //       $user = Model_Orm_User::find($user_id);
            //       $val = Model_Orm_Datas::validate('create');
            //       $datas = Model_Orm_Datas::forge(
            //          array(
            //           'email' => $user->username,
            //           'title' => Input::post("title"),
            //           'template' => "Productivity",
            //           'question1' => Input::post("question1"),
            //           'question2' => Input::post("question2"),
            //           'question3' => Input::post("question3"),
            //           'answer1' => request::param("randomQuestions"),
            //           'answer2' => request::param("question2"),
            //           'answer3' => request::param("question3"),
            //           'date' => $realDate,
            //           'public' =>'1'
            //           ));

            // if($datas->save()) {
            //   Response::redirect('templates/index');
            // }
          }



        $allQuestions = Model_Orm_Templates::find('all');
        $data['randomQuestions'] = array();
        $data['ProductivityQuestions'] = array();
        foreach ($allQuestions as $question) {
          if($question->template_name == "Productivity") {
            array_push($data['ProductivityQuestions'], $question);
          }
        }

          $someCoolQuestions = $data['ProductivityQuestions'];
          $unicNumberOne = 0;
          $unicNumberTwo = 0;
          $unicNumberThree = 0;


          while ( ($unicNumberOne ==  $unicNumberTwo) ||  ($unicNumberTwo ==  $unicNumberThree) || ($unicNumberOne == $unicNumberThree)) {
            $unicNumberOne = rand(0,count($someCoolQuestions)-1);
            $unicNumberTwo = rand(0,count($someCoolQuestions)-1);
            $unicNumberThree = rand(0,count($someCoolQuestions)-1);

          }

          $tempQuestion =  $someCoolQuestions[$unicNumberOne];
            array_push($data['randomQuestions'], $tempQuestion);
          $tempQuestion =  $someCoolQuestions[$unicNumberTwo];
            array_push($data['randomQuestions'], $tempQuestion);
          $tempQuestion =  $someCoolQuestions[$unicNumberThree];
            array_push($data['randomQuestions'], $tempQuestion);

         return View::forge('templates/productivity',$data);
      }


      public function action_inspiration()  {

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
                      'template' => "Productivity",
                      'question1' => Input::post("question1"),
                      'question2' => Input::post("question2"),
                      'question3' => Input::post("question3"),
                      'answer1' => Input::post("answer1"),
                      'answer2' => Input::post("answer2"),
                      'answer3' => Input::post("answer3"),
                      'date' => $realDate,
                      'public' =>'1'
                      ));

            if($datas->save()) {
              Response::redirect('templates/index');
            }
          }



        $allQuestions = Model_Orm_Templates::find('all');
        $data['randomQuestions'] = array();
        $data['InspirationQuestions'] = array();
        foreach ($allQuestions as $question) {
          if($question->template_name == "Productivity") {
            array_push($data['InspirationQuestions'], $question);
          }
        }

          $someCoolQuestions = $data['InspirationQuestions'];
          $unicNumberOne = 0;
          $unicNumberTwo = 0;
          $unicNumberThree = 0;


          while ( ($unicNumberOne ==  $unicNumberTwo) ||  ($unicNumberTwo ==  $unicNumberThree) || ($unicNumberOne == $unicNumberThree)) {
            $unicNumberOne = rand(0,count($someCoolQuestions)-1);
            $unicNumberTwo = rand(0,count($someCoolQuestions)-1);
            $unicNumberThree = rand(0,count($someCoolQuestions)-1);

          }

          $tempQuestion =  $someCoolQuestions[$unicNumberOne];
            array_push($data['randomQuestions'], $tempQuestion);
          $tempQuestion =  $someCoolQuestions[$unicNumberTwo];
            array_push($data['randomQuestions'], $tempQuestion);
          $tempQuestion =  $someCoolQuestions[$unicNumberThree];
            array_push($data['randomQuestions'], $tempQuestion);

         return View::forge('templates/inspiration',$data);
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
                'template' => "Free",
                'question1' => Input::post("text"),
                'question2' => "nothing",
                'question3' => "nothing",
                'answer1' => "nothing",
                'answer2' => "nothing",
                'answer3' => "nothing",
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