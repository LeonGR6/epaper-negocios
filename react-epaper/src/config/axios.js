import axios from "axios";

const clienteAxios = axios.create({
    baseURL:'http://localhost/negocios/laravel-epaper/public',
    headers: {
        'Accept' : 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    },
    
    withCredentials: true,
})

export default clienteAxios