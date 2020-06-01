<template>
    <div>
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="text-center">Artikelen</h3><br/>
            </div>
            <div class="card-body">
                <div v-if="articles">
                    <table class="table table-bordered bg-light">
                        <thead>
                        <tr>
                            <th>Onderwerp</th>
                            <th>Datum</th>
                            <th>Auteur</th>
                            <th>Categorie</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="article in articles">
                            <td>{{ article.subject }}</td>
                            <td>{{ convertDate(article.created_at) }}</td>
                            <td>{{ article.author }}</td>
                            <td>{{ article.name }}</td>
                            <td>
                                <div class="btn-group d-flex justify-content-center" role="group">
                                    <router-link :to="{ name: 'article', params: { id: article.id }}" class="btn btn-primary">details</router-link>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <router-link to="/add-article" class="btn btn-success">artikel toevoegen</router-link>
                </div>
                
                <div class="container d-flex justify-content-center" fluid v-else>
                    <b-spinner label="Spinning"></b-spinner>
                </div>
            </div>
        </div>
    </div>
</template>

<script>    
    import moment from 'moment';

    export default {
        data() {
            return {
                articles: null
            }
        },

        created() {
            this.getArticles()
        },

        methods: {
            getArticles() {
                this.axios
                    .get('http://localhost:8000/api/article')
                    .then(response => {
                        this.articles = response.data.articles;
                    });
            },

            convertDate(date) {
                return moment(date).format('DD-MM-YYYY')
            }
        }
    }
</script>   