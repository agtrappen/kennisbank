<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Artikel toevoegen</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mt-3 ml-auto mr-auto">
                        <form @submit.prevent="addArticle">
                            <div class="form-group">
                                <label>Onderwerp</label>
                                <input required type="text" class="form-control" v-model="article.subject">
                            </div>
                            <div class="form-group">
                                <label>Auteur</label>
                                <input required type="text" class="form-control" v-model="article.author">
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select required class="form-control" v-model="article.category_id">
                                    <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Artikel</label>
                                <textarea required class="form-control" rows="3" v-model="article.body"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                article: {},
                categories: []
            }
        },

        created() {
            this.getCategories()
        },

        methods: {
            getCategories() {
                this.axios
                    .get('http://localhost:8000/api/category')
                    .then(response => {
                        this.categories = response.data.category;
                    });
            },

            async addArticle() {
                await this.axios
                    .post('http://localhost:8000/api/article/add', this.article)
                    .then(response => (
                        this.$notify({
                            group: 'notification',
                            type: 'success',
                            title: 'Notificatie',
                            text: response.data
                        }),
                        
                        this.$router.push('/') 
                    ))
                    .catch(error => console.log(error))
            }
        }
    }
</script>