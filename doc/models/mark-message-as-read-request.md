
# Mark Message as Read Request

## Structure

`MarkMessageAsReadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messagingProduct` | `string` | Required | Messaging service used for the request. Use 'whatsapp'. | getMessagingProduct(): string | setMessagingProduct(string messagingProduct): void |
| `status` | `string` | Required | A message's status. You can use this field to mark a message as read. | getStatus(): string | setStatus(string status): void |
| `messageId` | `string` | Required | Id of the incoming message. | getMessageId(): string | setMessageId(string messageId): void |

## Example (as JSON)

```json
{
  "messaging_product": "whatsapp",
  "status": "read",
  "message_id": "incoming-message-id"
}
```

