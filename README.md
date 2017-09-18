[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Blockchain/functions?utm_source=RapidAPIGitHub_BlockchainFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Blockchain Package
Blockchain is the world's leading software platform for digital assets. Offering the largest production blockchain platform in the world, we are using new technology to build a radically better financial system.
* Domain: [blockchain.info](https://blockchain.info)

 ## Custom datatypes: 
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]``` 
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## Blockchain.getSingleBlock
Return a single block

| Field| Type  | Description
|-----|-------|----------
| hash| String| Block hash

## Blockchain.getSingleTransaction
Return a single transaction

| Field          | Type  | Description
|----------------|-------|----------
| transactionHash| String| Transaction hash

## Blockchain.getChartData
Return a data for charts

| Field    | Type  | Description
|----------|-------|----------
| chartType| String| Chart type. Example: ```transactions-per-second```

## Blockchain.getBlockForSpecifiedHeight
Return a block for specified height

| Field      | Type  | Description
|------------|-------|----------
| blockHeight| Number| Height of block

## Blockchain.getSingleAddress
Return data for single address

| Field  | Type  | Description
|--------|-------|----------
| address| String| Address can be base58 or hash160
| limit  | Number| Limit parameter to show n transactions. (Default: 50, Max: 50)
| offset | Number| Offset parameter to skip the first n transactions. (Page 2 for limit 50)

## Blockchain.getMultiAddress
Return data for multi address

| Field  | Type  | Description
|--------|-------|----------
| address| List  | Address can be base58 or xpub
| limit  | Number| Limit parameter to show n transactions. (Default: 50, Max: 100). This parameter does not work stably.
| offset | Number| Offset parameter to skip the first n transactions. (Page 2 for limit 50)

## Blockchain.getUnspentOutputs
Return unspent outputs

| Field        | Type  | Description
|--------------|-------|----------
| address      | List  | Address can be base58 or xpub
| limit        | Number| Limit parameter to show n transactions. (Default: 250, Max: 1000)
| confirmations| Number| Confirmations parameter to limit the minimum confirmations. (Page 2 for limit 50)

## Blockchain.getBalance
List the balance summary of each address listed.

| Field  | Type| Description
|--------|-----|----------
| address| List| Address can be base58 or xpub

## Blockchain.getLatestBlock
Return latest block data

No arguments.

## Blockchain.getUnconfirmedTransactions
Return unconfirmed transactions

No arguments.

## Blockchain.getDayBlocks
Get blocks for one day

| Field| Type      | Description
|-----|-----------|----------
| date| Number| Date into unixtime format. Example: 1505606503400

## Blockchain.getPoolBlocks
Get blocks for specific pool

| Field| Type  | Description
|-----|-------|----------
| pool| String| Pool name

