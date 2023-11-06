const currentYearSpan = document.querySelector('#currentYearSpan')

if(currentYearSpan)
{
    const date = new Date()
    const currentYear = date.getFullYear()

    currentYearSpan.innerHTML= currentYear
}

