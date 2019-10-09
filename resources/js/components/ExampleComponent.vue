<template>
  <div class="container">

    <div class="card text-white bg-dark mb-3 text-center">
        
      <div class="card-body">
        <h5 class="card-title">Bienvenido</h5>
        <p
          class="card-text"
        >Te damos la bienvenida a BlizzReg, eliga la opcion adecuada a sus necesidades</p>
      </div>
    </div> 
    <div class="row text-center ">
      <div class="col-sm-6">
        <div class="card text-white bg-secondary mb-3">
          <div class="card-body">
            <p
              class="card-text"
            >Accede al sistema si ya tienes una cuenta registrada.</p>
            <a href="login" class="btn btn-primary btn-lg">Acceder</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card text-white bg-secondary mb-3">
          <div class="card-body">
            <p
              class="card-text"
            >Registrate en el sistema si no posees una cuenta.</p>
            <a href="register" class="btn btn-primary btn-lg">Registrarse</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
