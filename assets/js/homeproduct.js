const productContainer=document.querySelectorAll('#productContainer')
const productTemplate=document.querySelectorAll('#productTemplate')


export const ShowProductsContainer =(product) =>{
    console.log(product)
    if(!product){
        return 
    }

product.forEach((creatP)=>{
    // // Find the template by its ID
    // const myTemplate = document.getElementById('my-template');

    //     // Clone the template's content
    // const clone = document.importNode(myTemplate.content, true);

    //     // Insert the cloned content into the document
    //     document.body.appendChild(clone);

    const {id, roomname , realprice ,descountprice ,image}=creatP;

    const clone = document.importNode(productTemplate.content, true);
    console.lo(clone)

    clone.querySelectorAll('.roomName').textcontent = roomname
    productContainer.append(clone);
})

}