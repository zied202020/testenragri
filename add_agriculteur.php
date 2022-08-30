<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.2/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>Gestion des agriculteurs</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="h-screen bg-gray-200">
    <div class="max-w-sm mx-auto rounded shadow-lg md:max-w-md my-10 p-6 pb-10 bg-gray-100">
        <div class=" flex justify-center border-b border-gray-300"><br/><br/>
        <div style="width: 80rem; margin-left: auto; margin-right: auto;">
        <h3 class="font-bold text-lg text-gray-400 pb-1 text-sm-right" style="color: #264E70;">Ajouter un agriculteur</h3>
</div>
    </div>
  <div class="card" style="width: 80rem; margin-left: auto;
  margin-right: auto;">
  <div class="card-body"> 
    <div class="form-check form-check-inline">
      <input
        class="form-check-input"
        type="radio"
        name="inlineRadioOptions"
        id="inlineRadio1"
        value="option1"
      />
      <label class="form-check-label" for="inlineRadio1">Mr.</label>
    </div>
    <div class="form-check form-check-inline">
      <input
        class="form-check-input"
        type="radio"
        name="inlineRadioOptions"
        id="inlineRadio2"
        value="option2"
      />
      <label class="form-check-label" for="inlineRadio2">Mme.</label>
    </div>
    <br/><br/>
    <form>
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Nom">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Prenom">
      </div>
      <div class="col">
      <select class="form-select" id="inputGroupSelect02">
      <option selected disabled>Tranche d'age</option>    
      <option value="1">40-50</option>
      <option value="2">30-40</option>
    </select>
  </div>
  </div><br/>
  <!--<button type="button" class="btn btn-success">Ajouter</button>-->
  <a href="<?php echo site_url('/add_agriculteur') ?>" class="btn btn-success mb-2">Ajouter</a>
  </form>
    <div class="input-group mb-3">
    </div>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Cvl</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Age</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php if($agriculteurs): ?>
          <?php foreach($agriculteurs as $agriculteur): ?>
            <tr>
             <td><?php echo $agriculteur['cvl']; ?></td>
             <td><?php echo $agriculteur['nom']; ?></td>
             <td><?php echo $agriculteur['prenom']; ?></td>
             <td><?php echo $agriculteur['age']; ?></td>
             <td>
            </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
    </tbody>
  </table>
</div>
</div><br/>
<br/>
  </body>
</html>
