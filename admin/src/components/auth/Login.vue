<template>
    <div>
        <h1>Login page</h1>
        <form method="post" v-on:submit.prevent="login()">
            <div>
                <div>
                    <div>Username</div>
                    <div>
                        <input type="text" v-model="email" />
                    </div>
                </div>
                <div>
                    <div>Password</div>
                    <div>
                        <input type="password"  v-model="password" />
                    </div>
                </div>
                <div>
                    <input type="submit" value="Login" />
                </div>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            login: function()
            {
                let data = new FormData();
                data.append('email', this.email);
                data.append('password', this.password);

                this.$http.post('/user/login.json', data)
                    .then((response) =>
                    {
                        return response;
                    })
                    .then(
                        data =>
                        {
                            localStorage.setItem('credentials', data.bodyText);
                            this.$router.push('/');
                        }
                    )
                    .catch(function (error)
                    {
                        console.log(error);
                        alert("invalid user data");
                    });
            }
        }
    }
</script>
