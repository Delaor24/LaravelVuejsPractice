<template>
  <div class="login-box mt-5" style="margin: 0 auto">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LOGIN</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form @submit.prevent="login" method="post">
          <div class="input-group mb-3">
            <input
              type="email"
              v-model="data.email"
              class="form-control"
              placeholder="Email"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <div class="text-danger">{{ validation.firstError("email") }}</div>
          </div>
          <div class="input-group mb-3">
            <input
              type="password"
              v-model="data.password"
              class="form-control"
              placeholder="Password"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="text-danger">
              {{ validation.firstError("password") }}
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" />
                <label for="remember"> Remember Me </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Sign In
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      data: {},
    };
  },
  methods: {
    login() {
      this.$validate().then((res) => {
        if (res) {
          axios
            .post("/login", this.data)
            .then((response) => {
              if (response.status == 200 && response.data.id) {
                Admin.login(response.data);
                this.notification(response.data.message, "success");
                window.location = this.$root.baseurl + "/admin/dashboard";
              } else if (response.status == 201) {
                this.notification(response.data.message, "error");
              } else if (response.status == 202) {
                this.notification(response.data.message, "warning");
              }
            })
            .catch((error) => {
              this.notification(
                "Something went wrong, please try again",
                "error"
              );
            });
        }
      });
    },
  },
  validators: {
    "data.email": function (value = null) {
      return Validator.value(value).required("Email is Required").email();
    },
    "data.password": function (value = null) {
      return Validator.value(value)
        .required("Password is Required")
        .minLength(6);
    },
  },
};
</script>

<style>
</style>