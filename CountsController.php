<?php

class CountsController extends V1Controller {

  protected $before_actions = [];

  public function user() {

    $count = Datauser::load()->count();
    $count_a = json_encode([$count], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    return $this->render(["text" => $count_a], ["content_type" => "application/json", "status_code" => 201]);

  }

}
?>
