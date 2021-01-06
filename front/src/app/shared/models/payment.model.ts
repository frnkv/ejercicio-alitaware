import { Subscription } from './subscription.model';
import { Usuario } from './usuario.model';

export interface Payment {

  id: number;

  user_id: string;

  user: Usuario;

  amount: number;

  subscriptions: Subscription[];

}
