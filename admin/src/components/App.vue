<template>
    <div id="app">
        <div>
            Header
        </div>
        <div>
            <div>
                <left-menu></left-menu>
            </div>
            <div>
                <router-view/>
            </div>
        </div>
    </div>
</template>
<script>
    import LeftMenu from '@/components/common/LeftMenu.vue';

    export default {
        data()
        {
            return {
                credentials: null,
            }
        },
        created(){
            if (localStorage.getItem('credentials'))
            {
                this.credentials = JSON.parse(localStorage.getItem('credentials'));

                this.$http.get('/user/get-admin-user.json',{
                        before(request) {
                            console.log(request);
                        },
                        headers: {
                            'token': this.credentials.token,
                            'user': this.credentials.user,
                            'Accept': 'application/json, text/plain, */*'
                        }

                    }
                )
                .then((response) =>
                {
                    return response.json();
                })
                .then(
                    data =>
                    {
                        //alert("ok");
                    }
                )
                .catch(function (error)
                {
                    this.$router.push('login');
                });
            }
            else
                this.$router.push('login');
        },
        components: {
            'left-menu': LeftMenu,
        }
    }
</script>
