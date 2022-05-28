const app = new Vue({
    el: '#app',
    data: {
        dischi: [],
        genereMusicale: [],
        selectedGenre: '',
        apiPath: './server.php',
    },
    methods: {
        getData(genere=null){
            let path;
            if(genere) {
                // const path = `${this.apiPath}?genere=${genere}`;
                path = this.apiPath+'?genre='+genere;
            }
            else {
                path = this.apiPath;
            }
            axios.get(path).then((res)=>{
                // console.log(res);
                this.dischi = res.data;
                // console.log(this.dischi);
                this.dischi.forEach((genereDisco)=>{
                    if(!this.genereMusicale.includes(genereDisco.genre)){
                        this.genereMusicale.push(genereDisco.genre);
                    }
                    // console.log(this.genereMusicale)
                })
            })
        },

        search(){
            console.log(this.selectedGenre);
            this.getData(this.selectedGenre)
            
        }

    },
    mounted(){
        this.getData();
        
    }
})