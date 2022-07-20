import './bootstrap';
import 'bootstrap'
import { Toast } from 'bootstrap'

const divToast = document.getElementById('liveToast')
if(divToast) {    
    const toast = new Toast(divToast)
    toast.show()
}  
