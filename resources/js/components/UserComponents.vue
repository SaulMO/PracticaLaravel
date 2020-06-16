<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users List</div>
                    <button class="btn btn-primary" @click="get_users()">Load Users</button>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" :key="user.id">
                                    <th>{{ user.id }}</th>
                                    <th>{{ user.name }}</th>
                                    <th>{{ user.email }}</th>
                                    <th>{{ user.created_at }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    export default {
        data(){
            return {
                users: {}
            }
        },
        methods: {
            get_users(){
                axios.get('/users/list').then((response) => {
                    this.users = response.data.users
                })
            }
        },
        created() {
            //this.get_users()
        }
    }
</script>
