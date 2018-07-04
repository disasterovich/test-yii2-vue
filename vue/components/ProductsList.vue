<template>
    <div class="products">
        <h1>Список товаров</h1>
	<ul>
            <li v-for="product in products" :key="product.id">                
                <a href="#" class="" @click="viewProductDetails(product.id)">{{product.title}}</a>
            </li>
	</ul>
    </div>
</template>
<script>    
import axios from 'axios';

export default {
    data() {
      return {
          products: [],
      }  
    },    
    created() {        
        this.loadProductsList();
    },
    methods: {
        loadProductsList() {
            axios
              .get("/api/products")
              .then(response => (this.products = response.data))
              .catch(error => console.log(error));            
        },
        viewProductDetails(id) {           
            this.$router.push('products/'+id);
        }
    }
}
</script>

<style scoped>
    .products {
        border: 1px solid grey;
        border-radius: 10px;
        margin: 10px;
        padding: 10px;  
    }
</style>