const app = new Vue({
    el: '#root',
    data: {
        discs: [],
    },
    methods: {
        getAlbum() {
            axios.get('http://localhost/php-ajax-dischi/api/php_index.php').then(response => {
                this.discs = response.data;
            }).catch(err => {console.log(err) });
        }
    },
    created() {
        this.getAlbum();
    },
   
   
})