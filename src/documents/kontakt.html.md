```
title: Kontakt
layout: page
tags: ['intro','page']
pageOrder: 4
keywords: kontakt, email
description: Hier nehmen wir gerne Ihre Anfrage entgegen.
```

<h3>Anfrage</h3>
<form class="form-horizontal" role="form" method="post" action="submit.php">
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input name="name" class="form-control" id="inputName3" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
	<label for="inputMessage3" class="col-sm-2 control-label">Nachricht</label>
	<div class="col-sm-10">
		<textarea name="message" class="form-control" id="inputMessage3"></textarea>
	</div>
  </div>
   <div class="antispam">
	<label for="inputUrl3" class="col-sm-2 control-label">Dieses Feld nicht ausfüllen!</label>
	<div class="col-sm-10">
		<input name="url" />
	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Absenden</button>
    </div>
  </div>
</form>
