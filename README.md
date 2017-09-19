[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Blockchain/functions?utm_source=RapidAPIGitHub_BlockchainFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Blockchain Package
Blockchain is the world's leading software platform for digital assets. Offering the largest production blockchain platform in the world, we are using new technology to build a radically better financial system.
* Domain: [blockchain.info](https://blockchain.info)

## How to get credentials: 
1. Please fill out the [form](https://api.blockchain.info/customer/signup) to apply for an API key
2. Requests for API keys are typically reviewed within 2-3 business days.

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
| date| DatePicker| Required date.

## Blockchain.getPoolBlocks
Get blocks for specific pool

| Field| Type  | Description
|-----|-------|----------
| pool| String| Pool name

## Blockchain.getCurrentBlockHeight
Current block height in the longest chain

| Field    | Type       | Description
|----|------------|----------
| key| credentials| Your blockchain.info api key.

## Blockchain.getCurrentBlockReward
Current block reward in BTC

| Field    | Type       | Description
|----|------------|----------
| key| credentials| Your blockchain.info api key.


## Blockchain.getAddressReceivedNumber
Get the total number of bitcoins received by an address (in satoshi).

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| address| String     | Address can be base58 or hash160

## Blockchain.getAddressTransmitBitcoins
Get the total number of bitcoins send by an address

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| address| String     | Address can be base58 or hash160

## Blockchain.getAddressBalance
Get the balance of an address (in satoshi). 

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| address| String     | Address can be base58 or hash160

## Blockchain.getAddressTimestamp
Timestamp of the block an address was first confirmed in.

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| address| String     | Address can be base58 or hash160

## Blockchain.getTransationTotalOutputValue
Get total output value of a transaction (in satoshi)

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Your blockchain.info api key.
| txHash| String     | Tx hash string

## Blockchain.getTransationTotalInputValue
Get total input value of a transaction (in satoshi)

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Your blockchain.info api key.
| txHash| String     | Tx hash string

## Blockchain.getTransactionFree
Get fee included in a transaction (in satoshi).

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Your blockchain.info api key.
| txHash| String     | Tx hash string

## Blockchain.calculateResult
Calculate the result of a transaction sent or received to Address.

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| txHash | String     | Tx hash string
| address| String     | Address can be base58 or hash160

## Blockchain.convertAddressToHash
Converts a bitcoin address to a hash 160.

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| address| String     | Address can be base58 or hash160

## Blockchain.convertHashToAddress
Converts a hash 160 to a bitcoin address.

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Your blockchain.info api key.
| txHash| String     | Tx hash string

## Blockchain.convertKeyToHash
Converts a public key to a hash 160

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Your blockchain.info api key.
| pubKey| String     | Public key string

## Blockchain.convertKeyToAddress
Converts a public key to an Address

| Field | Type       | Description
|-------|------------|----------
| key   | credentials| Your blockchain.info api key.
| pubKey| String     | Public key string

## Blockchain.convertAddressToPublicKey
Converts an address to public key (if available)

| Field  | Type       | Description
|--------|------------|----------
| key    | credentials| Your blockchain.info api key.
| address| String     | Address can be base58 or hash160

## Blockchain.getExchangeRate
Returns a JSON object with the currency codes as keys. `15m` is the 15 minutes delayed market price, `last` is the most recent market price, `symbol` is the currency symbol.

| Field    | Type       | Description
|----|------------|----------
| key| credentials| Your blockchain.info api key.

## Blockchain.convertToBTC
Convert x value in the provided currency to btc.

| Field   | Type       | Description
|---------|------------|----------
| key     | credentials| Your blockchain.info api key.
| currency| Select     | A currency code. Must be: USD,JPY,CNY,SGD,HKD,CAD,NZD,AUD,CLP,GBP,DKK,SEK,ISK,CHF,BRL,EUR,RUB,PLN,THB,KRW,TWD
| value   | String     | Value to convert.

## Blockchain.getDataBehindCharts
Get the data behind Blockchain's charts.

| Field         | Type       | Description
|---------------|------------|----------
| key           | credentials| Your blockchain.info api key.
| chartName     | String     | Chart name. Example: transactions-per-second
| timespan      | String     | Duration of the chart, default is 1 year for most charts, 1 week for mempool charts. Example: 5weeks
| rollingAverage| String     | Duration over which the data should be averaged. Example: 8hours
| start         | DatePicker | Datetime at which to start the chart.
| sampled       | Select     | Boolean set to 'true' or 'false' (default 'true'). If true, limits the number of datapoints returned to ~1.5k for performance reasons. 

## Blockchain.getDataBehindStats
Get the data behind Blockchain's stats

| Field    | Type       | Description
|----|------------|----------
| key| credentials| Your blockchain.info api key.

## Blockchain.getDataBehindPoolsInformation
Get the data behind Blockchain's pools information

| Field   | Type       | Description
|---------|------------|----------
| key     | credentials| Your blockchain.info api key.
| timespan| String     | Duration over which the data is computed, maximum 10 days, default is 4 days. Example: 5days

