export default {
    obtener: async function(){
        let peticion = await fetch("api/api.php");
        let data = await peticion.text();
        return data;
    }
}









