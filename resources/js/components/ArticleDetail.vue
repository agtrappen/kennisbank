<template>
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Artikel details</h3><br/>
            </div>
            <div class="card-body">
                <div v-if="article">
                    <table class="table table-bordered bg-light">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Onderwerp</th>
                            <th>Datum</th>
                            <th>Auteur</th>
                            <th>Categorie</th>
                            <th>Omschrijving</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="item in article">
                            <td>{{ item.id }}</td>
                            <td>{{ item.subject }}</td>
                            <td>{{ convertDate(item.created_at) }}</td>
                            <td>{{ item.author }}</td>
                            <td>{{ item.name }}</td>
                            <td>{{ item.body }}</td>
                        </tr>
                        </tbody>
                    </table>
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
                article: null
            }
        },

        created() {
            this.getArticle()
        },

        methods: {
            getArticle() {
                this.axios
                    .get(`http://localhost:8000/api/article/details/${this.$route.params.id}`)
                    .then(response => {
                        this.article = response.data.articles;
                    });
            },

            convertDate(date) {
                return moment(date).format('DD-MM-YYYY')
            }
        }
    }
</script>   