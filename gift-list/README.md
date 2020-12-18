# Restful API: Christmas Shopping List

- [Restful API: Christmas Shopping List](#restful-api-christmas-shopping-list)
- [Gifts](#gifts)
  - [GET all gifts](#get-all-gifts)
  - [POST a gift](#post-a-gift)
  - [PATCH a gift](#patch-a-gift)
  - [DELETE a gift](#delete-a-gift)
- [Friend](#friend)
  - [GET all Friends](#get-all-friends)
  - [GET a specific friend](#get-a-specific-friend)
  - [GET all gifts belonging to one friend](#get-all-gifts-belonging-to-one-friend)
  - [POST a friend](#post-a-friend)
  - [PATCH a friend](#patch-a-friend)
  - [DELETE a friend](#delete-a-friend)


# Gifts
## GET all gifts
To GET all the gifts available use:
`https://appy-wrapping.developme.space/api/gifts`

This should return for each gift:
- id
- item_name 
- price
- bought
<br><br>

## POST a gift
To POST a gift use:
`https://appy-wrapping.developme.space/api/gifts`

You need to pass:
- item_name (string)
- price (number)
<br><br>

## PATCH a gift
To PATCH a gift use:
`http://ec2-35-178-213-148.eu-west-2.compute.amazonaws.com/api/gifts/{giftID}`

You need to pass:
- item_name (string)
- price (number)
<br><br>

## DELETE a gift
To DELETE a gift use:
`https://appy-wrapping.developme.space/api/gifts/{giftID}`

You will receive a 204 when successfully deleted.
<br><br><br>



# Friend
## GET all Friends
To GET all the friends available use:
`https://appy-wrapping.developme.space/api/friends`

This should return for each friend:
-id
-name
-budget
<br><br>

## GET a specific friend
To GET a specific friend use:
`https://appy-wrapping.developme.space/api/friends/{friend_id}`

This shoudl return for each friend:
-id
-name
-budget
<br><br>

## GET all gifts belonging to one friend
to GET all the gifts belonging to a specific friend use;
`https://appy-wrapping.developme.space/api/friends/{friend_id}/gifts`

This should return for each gift:
-id
-item_name
-price
-bought
<br><br>

## POST a friend
To POST a gift use:
`http://ec2-35-178-213-148.eu-west-2.compute.amazonaws.com/api/friends`

You need to pass:
- name (string)
- budget (number)
<br><br>

## PATCH a friend
To PATCH a friend use:
`https://appy-wrapping.developme.space/api/friends/{friendID}`

You need to pass:
- name (string)
- budget (number)
<br><br>

## DELETE a friend
To DELETE a friend use:
`https://appy-wrapping.developme.space/api/friend/{friendID}`

You will receive a 204 when successfully deleted.