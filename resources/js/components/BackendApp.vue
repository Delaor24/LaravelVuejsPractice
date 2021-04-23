<template>
  <div>
    <FlashMessage></FlashMessage>
    <keep-alive>
      <router-view></router-view>
    </keep-alive>
  </div>
</template>

<script>
export default {
  name: "BackendApp",
};
</script>

<style>
</style>