function solution(number) {
    let total = 0;
    for(let i = 0; i < number; i++)
        i % 3 == 0 || i % 5 == 0 ? total += i : false; 
    return total;
}
