# vending-machine-kata
This is a simple code kata for the vending machine code kata

## Vending Machine
The goal of this program is to model a vending machine and the state it must maintain during it's operation.
How exactly the actions on the machine are driven is left intentionally vague.

- The machine works like all vending machines, it takes money then it gives you items.
- The vending machine accepts money in the form of nickels, dimes, quarters and paper dollars.
- You must at least have 3 primary items that cost $0.65, $1.00 and $1.50.
- The user may hit the "coin return" button to get back the money they have entered so far.
- If you put more money in than the item's price, then you get back change.

## Specification

### The valid set of actions on the vending machine are:

NICKEL(0.05), DIME(0.1), QUARTER(0.25), DOLLAR(1.00) - insert money
COIN RETURN - return all inserted money
GET-A, GET-B, GET-C - select item A($0.65), B($1.00), C($1.50)
SERVICE - a service person opens the machine and sets the available change and items

##The valid set if responses from the vending machine are:

NICKEL, DIME, QUARTER - return coin
A, B, C - vend item A,B or C

##The vending machine must track the following state:

Available items - each item has a count, a price and a selector (A, B or C)
Available change - number of nickels, dimes, quarters and dollars available
Currently inserted money

## Example input and output

### Example 1: Buy B with exact change
```
Q, Q, Q, Q, GET-B
-> B
```

### Example 2: Start adding change but hit coin return to get change
```
Q, Q, COIN-RETURN
Q, Q
```

### Example 3: Buy A without exact change (return $0.35)
```
DOLLAR, GET-A
A, Q, D
```
