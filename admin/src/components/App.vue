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

            this.$http.jsonp('http://site2.msd.loc/user/get-admin-user.json', {
                before(request) {
                    console.log(request);
                },
                headers: {
                    token: '1234',
                    user: '1',
                    Accept: 'application/json, text/plain, */*'
                }

            }).then(response => {
                console.log('bb');
            }, response => {
                console.log(response);
                // this.$router.push('login');
            });
        }
    }
</script>
