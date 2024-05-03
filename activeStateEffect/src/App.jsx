import React, { useState } from 'react'
let obj=[
  {
  id:1,
  title:'S'
},
  {
  id:2,
  title:'M'
},
  {
  id:3,
  title:'xl'
},
  {
  id:4,
  title:'XL'
},
]


const App = () => {
const [active,setActive]=useState(3)


const handleActive=(id)=>{
  console.log('hello')
  console.log(id)
  setActive(id)


}

  return (
    <section className='main'>

<ul className='container'>
{obj.map((item)=>{
  return <li onClick={()=>handleActive(item.id)} key={item.id} className={active===item.id?'item activeItem':'item'} >{item.title}</li>
})}

</ul>

    </section>
  )
}

export default App
