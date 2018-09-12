# Envoysoft Payment API

Envoysoft is the API service that lists payments made to bank payment systems.


#### Usage
```php
include("src/Envoysoft.php");

$data=new Envoysoft(
	"CLIENT_ID",
	"CLIENT_SECRET",
	"USER_NAME",
	"PASSWORD"
);
```


#### Getting Login
```php
$data->getLogin();
```
<details>
 <summary>View Response</summary>

```js
{
token_type: "Bearer",
expires_in: 900,
access_token: "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc2YjY2MWE1Njg4NmMwMWUwZjlmZjYwNzRjYjYyNWYxZTZkNzk4YzJiM2MzMmZhMjU5N2JiYzk4MWEwMTQyMDNiODA1NGNiZmVkMzEwM2IxIn0.eyJhdWQiOiIyMSIsImp0aSI6Ijc2YjY2MWE1Njg4NmMwMWUwZjlmZjYwNzRjYjYyNWYxZTZkNzk4YzJiM2MzMmZhMjU5N2JiYzk4MWEwMTQyMDNiODA1NGNiZmVkMzEwM2IxIiwiaWF0IjoxNTM2Nzc3NjQ4LCJuYmYiOjE1MzY3Nzc2NDgsImV4cCI6MTUzNjc3ODU0OCwic3ViIjoiMzAiLCJzY29wZXMiOltdfQ.iliRluVBHiroOtyjE8w45Ql1cbyzSdmdqwQPeVOOLfJJJkuZGpP5jV1gX9U3qZGPvQXQ5q-9hNkgQjaWeOvUPs8Zv3B6Sn2ep8nYoNuZgZZ3OjedEKv9nz2ixwq2lYmFdToYCLEPVZdtVfEwhnYu9wdewVyZEnOW4b68fwKjk65oGUt5200Q1_fG1PloFNrDZLW7w0efZ1NNM5iu_hJRG7OSmTNhNCd8B0wqrRGUXSzVdVHk2l2zYlNT-O3-bWoptZylFe1jZ64QNdHniHrmf57aGOgViTLKQDLYWrHRbGZmhpcgThwrZYjWs9KRqgswnM7UIH7EHWEGjeUtDXGudsHfjNX6fVfzjr9wPNTGgeMda4PPS7_cXU-MopFmFjlqenWfH0p1xbXSd921Bivk-AogiADJplVq8ysbvcc1kFBaGnpb9qwM_rsJWp7Pw9eeaTqxKH5Y9ixreu7o7VzASRl84WxGpYWp4X0z_le0gfeVuTlMNf_-QyCod06g-1t_FVIQoS39V8WLn61qfKqmy4-U52xGGNolRf0k088IS5nBC1KbfT6FrP9PvoPnvxV6wo4TMDvB8YMpoJ1Fe48pZSrZYOt5mCRucYCzQUEy8rgMwKX3FUhBYF-7VrRJ5Rw52MjdwbrQG4PAwH1QVVwuwzhhiTGpJKgZDEciurk1kRs",
refresh_token: "def50200ced26ec891ca1faef4ec2e296a12d71900d282a085c3a04d390bfeed863e0fb783edbd9398d4a1c35a079de0fbda0561554bc93c2b9f1863cfb60314b83d14332f8132c72d477288701a3cd311d8ee552184eccb946fbca69e178293accdcab1db172dce747d773afcb8ff1391d92db4fda494985e31a949c4a0e6121c4d14a04800951756c3bff46c0e3a1c567a7b026b86e6c9c7b5eccd10d8cd4f04c9b0846c0ddbf7199acba96b44047cf46214750bdb0cb4df984671515dc8fb717339fd96535148d9366a7ddfc119b188b17c7a4b69f6806ecfd48a03c766693d6b6fd9d08730f7f100ea154aab1ce710bd359bc4e8e7687e28636654a55dfcdf4879977ace0fb1c6b47537064b100c3dd1f3cb9bdc711d4e5ae0617eb6f986d51946dd4b61c0c4ffc7f1868d42c4680e5f43aea3e5dabad174dbfe036defd802d61be6dd322f22023a0b08f03594d65aa9148e4960c3004ce98b72c4e20f50e9b7c8"
}

```
</details>


#### Getting Bank List
```php
$data->getBank("ACCESS_TOKEN");
```
<details>
 <summary>View Response</summary>

```js
{
status: true,
photo_path: "https://teststage.envoysoft.net/static/img/banks/",
banks: [
{
bank_name: "İş Bankası",
slug: "isBankasi",
photo: "LE2iHpx45KmTuwGdW137om6LfwfqTvL8.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00064"
},
{
bank_name: "AkBank",
slug: "akBank",
photo: "7V1NF1pk7QYe2OVwL1AzcRpevEhNNWFr.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00046"
},
{
bank_name: "HalkBank",
slug: "halkbank",
photo: "DouoIH3iAbmtDXxHrXArTrbC7vjMMqBW.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00012"
},
{
bank_name: "Garanti Bankası",
slug: "garantiBankasi",
photo: "EkGL59sWIf1RBIfpQ7i7BTIWYR3TznoB.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00062"
},
{
bank_name: "Ziraat Bankası",
slug: "ziraatBankasi",
photo: "aycbf1c3Ef7vt03NdbixQavWGIOyitPg.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00010"
},
{
bank_name: "FinansBank",
slug: "finansBank",
photo: "4u5jUsUKYVAxCXjRBWpOQNR5DWZW9lta.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00111"
},
{
bank_name: "Yapı Kredi Bankası",
slug: "yapiKrediBankasi",
photo: "aQ6cORMxiQYfwc74jPACmfmDTBVO6jpa.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00067"
},
{
bank_name: "Enpara",
slug: "enpara",
photo: "kL7xrZftw34rEfkEnjMuviIYDzzVj7yg.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00111"
},
{
bank_name: "Vakıfbank",
slug: "vakifbank",
photo: "MnMoyJ3r0OLiu3erzgl1glvpj30r2KqG.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00015"
},
{
bank_name: "ING Bank",
slug: "ingBank",
photo: "KPf4Cp2EnFs5q6mhDqg3JpY9dxkCzSAi.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00099"
},
{
bank_name: "Papara",
slug: "ePara",
photo: "0KnOcmWZZq1cXRTWUPqSQEv9B7TPfYyn.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: ""
},
{
bank_name: "PTT BANK",
slug: "pttbank",
photo: "Ik1wdPJ7TgJ8gxlmiUz1DYmTtBgIVVW6.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00015"
},
{
bank_name: "DenizBank",
slug: "denizBank",
photo: "5meBck4DOd5xI1N8ggoVWfDBB2lF1IbN.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00134"
},
{
bank_name: "TEB",
slug: "teb",
photo: "4yPecy81y0PGaPBkZwISXmLKFUav53jQ.jpg",
min_deposit_limit: null,
max_deposit_limit: null,
min_withdraw_limit: null,
max_withdraw_limit: null,
iban_format: "00032"
}
]
}

```
</details>


#### Getting Bank Amount List
```php
$data->getAmount("ACCESS_TOKEN","SLUG");
```
<details>
 <summary>View Response</summary>

```js
{
status: true,
draws: [
{
ref_code: "7YJv8djJagaxUN3v",
amount: "100.00"
},
{
ref_code: "J9IRVn4FIbjvINlE",
amount: "200.00"
}
],
description: ""
}

```
</details>
