package ejb;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import javax.ejb.Stateless;

@Stateless
public class AccountSessionBean implements AccountSessionBeanRemote {
    Map<Integer,Account> map = new HashMap<>();

    @Override
    public boolean createAccount(Account account) {
        map.put(account.getId(), account);
        return true;
    }

    @Override
    public boolean updateAccount(Account account) {
        Account get = getAccountById(account.getId());
        if (get != null) {
            get.setUsername(account.getUsername());
            get.setPassword(account.getPassword());
            get.setEmail(account.getEmail());
            get.setFirstName(account.getFirstName());
            get.setLastName(account.getLastName());
            map.put(account.getId(), get);
            return true;
        }
        return false;
    }

    @Override
    public boolean deleteAccount(int id) {
        Account get = getAccountById(id);
        if (get != null) {
            map.remove(id);
            return true;
        }
        return false;
    }

    @Override
    public Account getAccountById(int id) {
        if (map.containsKey(id)) {
            return map.get(id);
        } else {
            return null;
        }
    }

    @Override
    public Account getAccountByUsername(String username) {
        for (Account account : map.values()) {
            if (account.getUsername().equals(username)) {
                return account;
            }
        }
        return null;
    }

    @Override