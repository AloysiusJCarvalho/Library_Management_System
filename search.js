input=document.querySelector('input');
ListItems=document.querySelectorAll('table');
input.addEventListener('input',filter);
function filter()
{
    search=input.value.toLowerCase();
    ListItems.forEach(finction(table){
                      
                      text=table.innerHTML.toLowerCase();
    found=text.indexOf(search);
    if(search=='')
        {
            
            table.style.display='block';
        }
    else if(found==-1)
    {
        table.style.display='none';
        
    }else
        {
            
            table.style.display=block;        }
    
                      })
    
}