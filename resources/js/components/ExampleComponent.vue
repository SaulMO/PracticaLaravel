<template>
    <div class="container" id="app">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Página Prueba</a>
            <form class="form-inline">
                <div v-html="htmlContent"></div>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
            </form>
        </nav>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="red_social">Red Social</label>
                    <input type="text" class="form-control" id="red_social" v-model="red_social_model" aria-describedby="Red Social">
                    <small id="red_socialHelp" class="form-text text-muted">Colocar la clase de <a href="https://fontawesome.com/icons?d=gallery" target="_blank">font awesome icon view</a></small>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" v-model="url_model" aria-describedby="Red Social">
                    <small id="urlHelp" class="form-text text-muted">Dirección URL de red social</small>
                </div>
                <div class="form-group">
                    <label for="color">Color de fondo</label>
                    <input type="text" class="form-control" id="color" v-model="color_model" aria-describedby="Red Social">
                    <small id="colorHelp" class="form-text text-muted">Colocar en notación hexadecimal ejem: ffffff</small>
                </div>
                <button class="btn btn-primary" @click="nueva_red_social()">Submit</button>
            </div>
        </div>
        <footer class="page-footer font-small teal pt-4">
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
            </div>
        </footer>
    </div>
</template>

<script type="text/javascript">
    export default {
        data() {
            return{
                red_social_model : '',
                url_model : '',
                color_model : '',
                htmlContent : "",
            }
        },
        methods: {
            nueva_red_social(){
                this.htmlContent = this.htmlContent + '<a href="'+ this.url_model+'" class="btn" style="color:#000000; background-color: #'+ this.color_model +'"><i class="'+ this.red_social_model +'"></i></a>';
            }
        }
    }
</script>
