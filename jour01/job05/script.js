
function getWeekDates(){
    const dates = [new Date()]; // today
    const curr = new Date();
    const daysCount = 7-curr.getDay();
    for(let i=1; i<= daysCount; i++){
      // increase current Date by 1 and set to current Date
        const nextDate = curr.setDate(curr.getDate()+1);
      dates.push(new Date(nextDate));
    }
    return dates;
  }
  
  console.log(getWeekDates());
