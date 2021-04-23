<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <router-link :to="{ name: 'admin.dashboard' }"
                  >Dashboard</router-link
                >
              </li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="container row">
          <b-card no-body class="w-100">
            <b-tabs card>
              <b-tab title="Information" active>
                <b-card-text>
                  <b-list-group>
                    <b-list-group-item>
                      <b>Name : </b>
                      {{ $root.adminInfo.name }}
                    </b-list-group-item>

                    <b-list-group-item>
                      <b>Email : </b>
                      {{ $root.adminInfo.email }}
                    </b-list-group-item>
                    <b-list-group-item>
                      <b>Profile : </b>
                      <img
                        :src="
                          $root.adminInfo.profile
                            ? $root.adminInfo.profile
                            : $root.userimage
                        "
                        width="100"
                        height="100"
                        alt=""
                      />
                    </b-list-group-item>
                  </b-list-group>
                </b-card-text>
              </b-tab>
              <b-tab title="Update Profile">
                <b-card-text>Tab contents 2</b-card-text>
              </b-tab>
              <b-tab title="Chage Password">
                <b-card-text>Tab contents 2</b-card-text>
              </b-tab>
            </b-tabs>
          </b-card>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</template>

<script>
export default {
  name: "profile",
  data() {
    return {
      adminInfo: {},
    };
  },
};
</script>

<style>
</style>