<template>
    <div id="app">
        <div>
            Header
        </div>
        <div>
            <router-view/>
        </div>
    </div>
</template>
<script>
    export default {
        created(){

            this.$http.get('/user/get-admin-user.json', {
                before(request) {
                    console.log(request);
                },
                headers: {
                    token: '1234',
                    user: '1',
                }

            }).then(response => {
                console.log('bb');
            }, response => {
                console.log(response);
                this.$router.push('login');
            });
        }
    }
</script>