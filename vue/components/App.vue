<template>
    <div>
        <p>тест yii2 + vue.js</p>
        
        <router-link to="/products/add">Добавить товар</router-link>
        
        <router-view></router-view>
        
        <router-link to="/products">Назад</router-link>
    </div>
</template>

<script>
   
export default {
        
  data () {
    return {
    }  
  },
        
  mounted: function () {
    //console.log('App component mounted');
  },

  methods: {

  }
}
</script>

<style>

</style>