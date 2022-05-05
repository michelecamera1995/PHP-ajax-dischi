
new Vue({
    el: '#app',
    data() {
        return {
            Musics: [],
        }
    },
    mounted() {
        axios.get('http://localhost/php-ajax-dischi/php/data.php').then((response) => {
            if (response.status === 200) {
                this.Musics = response.data;
                console.log(this.Musics)
            }
        }).catch(error => console.log(error))
    }
});
