import './bootstrap'
import { createApp } from 'vue'
import  App from './components/App.vue'
import router from './components/routers'
import axios from 'axios'


const app = createApp(App)
app.use(router)
app.config.globalProperties.axios = axios
app.mount("#app")