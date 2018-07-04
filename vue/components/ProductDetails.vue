<template>
    <div class="product">
        <h1>Просмотр товара с ID={{product.id}}</h1>
        <form>
        <div>
            <label for="title">Title</label>
            <span>{{product.title}}</span>
        </div>
        <div>
            <label for="price">Price</label>
            <span>${{product.price}}</span>
        </div>
        <div>
            <label for="qt">Quantity</label>
            <span>{{product.qt}}</span>
        </div>
        </form>    
    </div>
</template>

<script>
import axios from 'axios';
    
export default {
    data() {
        return {
            product: {}
        }
    },
    created() {
        this.loadProductDetails(this.$route.params.id);
    },
        
    methods: {
        loadProductDetails(id) {
            axios
              .get("/api/products/"+id)
              .then(response => (this.product = response.data))
              .catch(error => console.log(error));                
        }
    },
    
    watch: {
        '$route.params.id' (id) {
            this.loadProductDetails(id);
        }
    }
    
    }    
</script>

<style scoped>
    .product {
        border: 1px solid grey;
        border-radius: 10px;
        margin: 10px 0;
        padding: 10px;  
    }
</style>