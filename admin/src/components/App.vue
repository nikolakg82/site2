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
            this.$http.headers.common.token = '1234';
            this.$http.headers.common.user_id = '1';
            this.$http.get('/user/get-admin-user.json', {
                before(request) {
                    console.log(request);
                }

            }).then(response => {
                console.log('aa');
            }, response => {
                this.$router.push('login')
            });
        }
    }
</script>