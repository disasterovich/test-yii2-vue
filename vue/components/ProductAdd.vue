<template>
    <div class="product">
        <h1>Добавление товара</h1>
        <form>
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" id="title" placeholder="Введите название товара" v-model="product.title" />
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number" class="form-control" id="price" placeholder="Введите цену за единицу товара" v-model="product.price" />
            </div>
            <div class="form-group">
                <label for="qt">Количество</label>
                <input type="number" class="form-control" id="qt" placeholder="Введите количество товара" v-model="product.qt" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" @click.prevent="addProduct()">Создать</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';
    
export default {
    data() {
        return {
            product: {
                title: 'test product',
                price: 123,
                qt: 6,
            }
        }
    },
    methods: {
        addProduct() {
            axios({
                    method: 'post',
                    url: '/api/products',
                    responseType: 'json',
                    data: this.product,
                    headers: {
                        'Content-type': 'application/json; charset=UTF-8',
                        }
                    }
                )
              .then(response => (
                    //this.product = response.data
                    this.$router.push('/')
                    )
                )
              .catch(error => console.log(error));
      
            
        }
    },   

    
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